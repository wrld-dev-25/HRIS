let cachedToken = null; // Cache for the token
let tokenPromise = null; // Cache for the token promise to avoid duplicate calls

async function apiCall(method, route, jsonData) {
    const baseURL = "http://127.0.0.1:8000/";  // Update this to your actual base URL if needed
    // const baseURL = "https://hris-services.wrldcapitalholdings.com/"
    const url = baseURL + route;
    //console.log(JSON.stringify(jsonData))
    try {
        const token = await getToken();
        //console.log("Received token:", token);
        
        // Perform the AJAX call with the token
        return $.ajax({
            type: method,  // e.g., "GET", "POST", "PUT", "DELETE"
            url: url,
            dataType: 'json',
            contentType: "application/json",  // Setting the correct content type for JSON data
            data: jsonData ? JSON.stringify(jsonData) : null,  // Converting JavaScript object to JSON string
            headers: {
                'Authorization': token ? 'Bearer ' + token : ''  // Include token if available
            },
            success: function(response) {
                //console.log('Success:', response);  // Handle successful response
            },
            error: function(xhr, status, error) {
                //console.error('Error:', error);  // Handle error response
            }
        });
        
    } catch (error) {
        //console.error("Error occurred:", error);
        // Handle error scenario, return a rejected promise to allow error handling by the caller
        showToast('An unexpected error occurred', 'bg-red-500');
        return $.Deferred().reject(error).promise();
    }
}

// Function to show toast message
function showToast(message, className) {
    Toastify({
        newWindow: true,
        text: message,
        gravity: 'top',
        position: 'right',
        className: className,
        stopOnFocus: true,
        offset: {
            x: 0, // horizontal axis - can be a number or a string indicating unity. eg: '2em'
            y: 0, // vertical axis - can be a number or a string indicating unity. eg: '2em'
        },
        duration: 3000,
        close: true,
    }).showToast();
}

async function getToken() {
    const baseURL = "http://127.0.0.1:8001/"; // Update this to your actual base URL if needed
    // const baseURL = "http://wchhris.techrostrum.com/"
    // const baseURL = "https://hris.wrldcapitalholdings.com/"

    // If the token is already cached, return it
    if (cachedToken) {
        return cachedToken;
    }

    // If a token request is already in progress, return the same promise
    if (tokenPromise) {
        return tokenPromise;
    }

    // Otherwise, fetch the token and cache it
    tokenPromise = $.ajax({
        url: baseURL + 'validate_call'
    })
        .then(response => {
            cachedToken = response.token; // Cache the token
            tokenPromise = null; // Clear the promise cache
            return cachedToken;
        })
        .catch(error => {
            tokenPromise = null; // Clear the promise cache on error
            console.error("Error fetching token:", error);
            throw error; // Propagate the error
        });

    return tokenPromise;
}