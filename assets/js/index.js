const ajaxPromise = (type, url, data) => {
    return new Promise((resolve, reject) => {
        $.ajax({
            type: type,
            url: url,
            data: data,
            success: function (res) {
                resolve(res)
            },
            error: function (err) {
                reject(err)
            },
            processData: false,
            contentType: false
        });
    })
}

const newRequestAPI = async (type, url, data) => {
    return new Promise(async (resolve, reject) => {
        try{
            res = await ajaxPromise(type, API_URL + url, data)
            resolve(res)
        }
        catch(e){
            if(e.status === 404){
                alert("API error not found")
                reject({})
            }

            errRes = JSON.parse(e.responseText)
            alert(errRes.message)

            reject(errRes)
        }
    })

}

const objToFromData = (obj) => {
    let formData = new FormData();

    for ( var key in obj ) {
        formData.append(key, obj[key]);
    }

    return formData
}

// client api ==========================
const loginRequest = async (email, password) => {
    formData = objToFromData({ email, password })
    return await newRequestAPI("POST", "/auth/signin", formData)
}


// signin
const signin = () => {
    const email = $("#input_email").val()
    const password = $("#input_password").val()

    loginRequest(email, password).then((res) => {
        localStorage.setItem("token", res.data.token)
    })
}

$("#submit_signin").click(() => {
    signin()
    console.log(API_URL)
})

