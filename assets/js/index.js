// utils ==========================

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
            res = await ajaxPromise(type, `${BASE_URL}api/${url}`, data)
            resolve(res)
        }
        catch(e){
            if(e.status === 404){
                alert("API error not found")
                reject({})
            }

            console.log(e)

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

const redirect = (url) => {
    $(location).attr("href", `${BASE_URL}${url}`)
}

const serializeArrToObj = (serializeArr) => {
    let data = {};
    $(serializeArr).each(function(index, obj){
        data[obj.name] = obj.value
    })

    return data
}

// end utils ==========================

// client api ==========================

//not pass form directly
//construct form to new object to maintain consistency

const signinRequest = async (form) => {
    formData = objToFromData({
        email: form.email,
        password: form.password
    })
    return await newRequestAPI("POST", "/auth/signin", formData)
}

const signupRequest = async (form) => {
    formData = objToFromData({
        firstName: form.firstName,
        lastName: form.lastName,
        phoneNumber: form.phoneNumber,
        gender: form.gender,
        email: form.email,
        password: form.password,
        address: form.address
    })
    return await newRequestAPI("POST", "/auth/signup", formData)
}

// end - client api ==========================


// signin
$('#signin_form').submit(function(e) {
    e.preventDefault()
    form = serializeArrToObj($(this).serializeArray())

    signinRequest(form).then((res) => {
        localStorage.setItem("token", res.data.token)
        redirect("")
    })
})

// signup
$('#signup_form').submit(function(e) {
    e.preventDefault()
    form = serializeArrToObj($(this).serializeArray())

    if(form.password !== form.confirmPassword){
        alert("password not match")
        return
    }

    signupRequest(form).then((res) => {
        redirect("signin")
    })
})