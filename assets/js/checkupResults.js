const checkupResults = async () => {
    const result = await getCheckupResultsRequest()

    let resultToTable = ""

    for (let key in result.data){
        resultToTable = resultToTable.concat(`
                        <tr>
                            <td>${parseInt(key)+1}</td>
                            <td>${result.data[key]["dateSubmitted"]}</td>
                            <td>${result.data[key]["description"]}</td>
                            <td>
                                 <a
                                    style="color: red; cursor: pointer"
                                    checkupId="${result.data[key]["id"]}"
                                    onclick="deleteCheckupById(this.getAttribute('checkupId'))"
                                 >Delete</a>
                            </td>
                        </tr>`)
    }

    $("#results_checkup_table").html(`
        <tr>
            <th>Nomor</th>
            <th>Date Submitted</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        ${resultToTable}
    `)
}

$( document ).ready(() => {
    checkupResults()
})

const deleteCheckupById = async (id) => {
    isConfirm = confirm("Anda yakin?")
    if(!isConfirm){
        return
    }
    await deleteCheckupByIdRequest(id)
    checkupResults()
}