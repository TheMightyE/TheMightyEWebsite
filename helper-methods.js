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
var urlResume = "resources/resume.json";
var urlProjects = "resources/projects.json";

function loadObjective() {
    $.getJSON(urlResume, function (obj) {
        $(document).ready(function () {
            $('#objective').html(obj.objective)
        })
    });

}

function loadEducation() {
    $.getJSON(urlResume, function (obj) {
        var edu = obj.education;

        $(document).ready(function () {
            edu.forEach(function (value) {
                $("#edu-list").append("<li><p>" + value.name + "</p></li>")
            })
        })

    });

}

function loadSkills() {
    $.getJSON(urlResume, function (obj) {
        var skills = obj.skills;

        $(document).ready(function () {
            for (var i = 0; i < skills.length; i++)
                $('#skill-list').append("<li><p>" + replace(skills[i]) + "</p></li>")
        })

    });

}


// Load projects

function loadKnightsTour() {
    $.getJSON(urlProjects, function (obj) {
        $(document).ready(function () {
            $('#knights-tour-description').append(obj.knights_tour.description)
        })

    });

}

function loadStocks() {
    $.getJSON(urlProjects, function (obj) {
        $(document).ready(function () {
            $('#stocks-description').append(obj.web_scraping.description)

        })
    })

}

function replace(str) {
    return str.replace(/COMMA/g, ",");
}

