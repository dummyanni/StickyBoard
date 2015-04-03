$(window).load(function() {
    $.ajax({
            type: "GET",
            url: "/include/showaccount.php",
            dataType: "json",
            success: function(data) {
                var name = document.createElement("p");
                var email = document.createElement("p");
                var bio = document.createElement("p");
                var totalTime = document.createElement("p");

                var hour = Math.floor(data["totalTime"] / 3600);
                var min = Math.floor((data["totalTime"] / 3600 - hour) * 60);
                var sec = Math.round(((data["totalTime"] / 3600 - hour) * 60 - min) * 60);

                name.textContent = JSON.stringify(data["Name"]).replace(/\"/g, "");
                email.textContent = JSON.stringify(data["Email"]).replace(/\"/g, "");
                bio.textContent = JSON.stringify(data["Bio"]).replace(/\"/g, "");
                totalTime.textContent = hour + " hours " + min + " minutes " + sec + " seconds";

                var array;
                array = [name, email, bio, totalTime];

                for (var i = 0; i < array.length; i++) {
                    var h4abi = document.getElementsByTagName("h4").item(i);
                    h4abi.parentNode.insertBefore(array[i], h4abi.nextSibling);
                }
            }
        }
    )
});