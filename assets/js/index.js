// utils ==========================

const ajaxPromise = (type, url, data, token = "") => {

    let headers = {}

    if(token !== ""){
        headers = {
            ...headers,
            'Authorization': `Bearer ${token}`
        }
    }

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
            contentType: false,
            headers: {
                ...headers
            }
        });
    })
}

const newRequestAPI = async (type, url, data, token = "") => {
    return new Promise(async (resolve, reject) => {
        try{
            res = await ajaxPromise(type, `${BASE_URL}api/${url}`, data, token)
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

    for (let key in obj) {
        formData.append(key, obj[key])
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

const getToken = () => {
    return localStorage.getItem("token")
}

const parseToken = () => {
    let token = localStorage.getItem("token")
    const split = token.split(".")
    token = split[1]
    token = atob(token)
    token = JSON.parse(token)

    return token
}

// end utils ==========================

// client api ==========================

//not pass form directly
//construct form to new object to maintain consistency

const signinRequest = async (obj) => {
    formData = objToFromData({
        email: obj.email,
        password: obj.password
    })
    return await newRequestAPI("POST", "/auth/signin", formData)
}

const signupRequest = async (obj) => {
    formData = objToFromData({
        firstName: obj.firstName,
        lastName: obj.lastName,
        phoneNumber: obj.phoneNumber,
        gender: obj.gender,
        email: obj.email,
        password: obj.password,
        address: obj.address
    })
    return await newRequestAPI("POST", "/auth/signup", formData)
}

const getBlindTestRequest = async () => {
    return await newRequestAPI("GET", "/blind_test", {}, getToken())
}

const submitBlindTestRequest = async (objArr) => {
    answers = []
    for (let key in objArr) {
        answers.push({
            id: objArr[key].id,
            answer: objArr[key].answer
        })
    }

    formData = objToFromData({
        answers: JSON.stringify(answers)
    })

    return await newRequestAPI("POST", "/blind_test/submit", formData, getToken())
}

const getBlindTestResultByIdRequest = async (id) => {
    return await newRequestAPI("GET", `/blind_test/result/${id}`, {}, getToken())
}

const getBlindTestResultsRequest = async () => {
    return await newRequestAPI("GET", `/blind_test/results`, {}, getToken())
}

const checkupRequest = async (obj) => {
    formData = objToFromData({
        dateSubmitted: obj.dateSubmitted,
        description: obj.description
    })
    return await newRequestAPI("POST", "checkup/submit", formData, getToken())
}

const getCheckupResultsRequest = async (id) => {
    return await newRequestAPI("GET", `/checkup/results`, {}, getToken())
}

const deleteCheckupByIdRequest = async (id) => {
    return await newRequestAPI("DELETE", `/checkup/result/${id}`, {}, getToken())
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

//logout
const logout = () => {
    localStorage.removeItem("token")
    redirect("signin")
}

//setUsername
const setUsername = () => {
    data = parseToken()
    username = data.firstName
    $("#username").text(username)
}


// checkup
$('#checkup_form').submit(function(e) {
    e.preventDefault()
    form = serializeArrToObj($(this).serializeArray())

    checkupRequest(form).then((res) => {
        redirect("checkup/results")
    })
})