const blindTestResult = async () => {
    const result = await getBlindTestResultByIdRequest(RESULT_ID)

    resultToTable = ""
    correctTotal = 0
    for (let key in result.data){
        if(result.data[key].isTrue){
            correctTotal++
        }
        resultToTable = resultToTable.concat(`
                        <tr>
                            <td>${parseInt(key)+1}</td>
                            <td>${result.data[key]["answer"]}</td>
                            <td>${result.data[key]["isTrue"] ? "Benar" : "Salah"}</td>
                        </tr>`)
    }

    $("#result_table").html(`
        <tr>
            <th>Nomor</th>
             <th>Jawaban</th>
             <th>Keterangan</th>
        </tr>
        ${resultToTable}
    `)

    $("#total_no").text(result.data.length)
    $("#correct_total").text(correctTotal)
}

$( document ).ready(() => {
    blindTestResult()
})