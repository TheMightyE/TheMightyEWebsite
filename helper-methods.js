/*function getJson() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var myObj = JSON.parse(this.responseText);
            document.getElementById("objective").innerHTML = myObj.objective;
        }
    };
    xmlhttp.open("GET", "resources/resume.json", true);
    xmlhttp.send();
}*/
var url = "resources/resume.json";

function loadObjective() {
    $.getJSON(url, function (obj) {
        $(document).ready(function () {
            $('#objective').html(obj.objective)
        })
    })

}

function loadEducation() {
    $.getJSON(url, function (obj) {
        var edu = obj.education;

        $(document).ready(function () {
            edu.forEach(function (value) {
                $("#edu-list").append("<li><p>" + value.name + "</p></li>")
            })
        })

    })

}

function loadSkills() {
    $.getJSON(url, function (obj) {
        var skills = obj.skills;

        $(document).ready(function () {
            for (var i = 0; i < skills.length; i++)
                $('#skill-list').append("<li><p>" + replace(skills[i]) + "</p></li>")
        })

    })

}

function replace(str) {
    return str.replace(/COMMA/g, ",");
}

