const blindTestResults = async () => {
    const results = await getBlindTestResultsRequest()

    const blindTestResultTable = (result) => {
        resultToTable = ""
        for (let key in result){
            resultToTable = resultToTable.concat(`
                        <tr>
                            <td>${parseInt(key)+1}</td>
                            <td>${result[key]["answer"]}</td>
                            <td>${result[key]["isTrue"] ? "Benar" : "Salah"}</td>
                        </tr>`)
        }
        const table = `
            <div class="section section_blind_test_result">
                <div class="result">
                    <table id="result_table">
                        <tr>
                            <th>Nomor</th>
                             <th>Jawaban</th>
                             <th>Keterangan</th>
                        </tr>
                        ${resultToTable}
                    </table>
                </div>
            </div>
        `
        return table
    }

    let blindTestResults = ''
    for(let key in results.data){
        blindTestResults = blindTestResults.concat(blindTestResultTable(results.data[key].result))
    }

    $("#section_results_blindTest").html(blindTestResults)

}

$( document ).ready(() => {
    blindTestResults()
})