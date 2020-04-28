const blindTest = async () => {
    const res = await getBlindTestRequest()
    const getBlindTests = res.data

    const setCurrentNo = (no) => {
        $("#current_no").text(no)
    }
    const setTotalNo = (total) => {
        $("#total_no").text(total)
    }
    const setImage = (path) => {
        $("#blind_test_image").css("background-image", `url("${BASE_URL}assets/images/${path}")`)
    }

    //init value
    let currentNo = 1
    setTotalNo(getBlindTests.length)
    setCurrentNo(currentNo)
    setImage(getBlindTests[0].filePath)

    let anwers = []

   $("#next_image").click(async () => {
       answer = $("#answer").val()
       anwers.push({
           answer: answer,
           id: getBlindTests[currentNo-1].id
       })

       if(currentNo === getBlindTests.length){
            //submit blindTest
           const res = await submitBlindTestRequest(anwers)
           redirect(`blind_test/result/${res.data.id}`)
           return
       }

       setImage(getBlindTests[currentNo].filePath)

       currentNo++

       setCurrentNo(currentNo)
       //if currentNo equal to blindtest length, change "lanjut" to "submit"
       if(currentNo === getBlindTests.length){
           $("#button_next").text   ("submit")
       }
       //reset value when next clicked
       $("#answer").val("")
   })
}

$( document ).ready(() => {
    blindTest()
})