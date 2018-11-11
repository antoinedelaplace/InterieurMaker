/**
 * function called when user choose a job
 * display reservation table
 */
function open_table(job, path, path2) {
    var domain = document.getElementById("selected_job");

    document.getElementById("planning-table").style = "visibility : hidden;";
    domain.innerHTML = job.id;
    display_available_reservations(domain.innerHTML, path, path2);
    document.getElementById("actual-month").style = "visibility : visible;text-align: center;";
    document.getElementById("planning-table").style = "visibility : visible;";
}

/**
 * open the modal for technical sheet and send to the controller to reserve schedule for 10minutes
 * @param schedule -> choosen schedule
 * @param path  -> to the controller
 */
function open_technical_sheet(schedule, path) {
    var xmlhttp;
    var domain = document.getElementById("selected_job").innerHTML;
    var hours = schedule.innerHTML;
    var actualMonth = document.getElementById("actual-month").innerHTML;
    var day = "";
    var dateTime;
    var popup = new Foundation.Reveal($('#modal-fiche-intervention'));
	alert(document.getElementById("selected_job").innerHTML);
    document.getElementById("idFiche").value = "";
    popup.open();
    if (schedule.cellIndex == 1)
        day = document.getElementById("planning-table").firstElementChild.children[0].cells[schedule.cellIndex].children[1].innerHTML;
    else if (document.getElementById("planning-table").firstElementChild.children[0].cells[schedule.cellIndex].children[0])
        day = document.getElementById("planning-table").firstElementChild.children[0].cells[schedule.cellIndex].children[0].innerHTML;
    else
        day = document.getElementById("planning-table").firstElementChild.children[0].cells[schedule.cellIndex].innerHTML;
    dateTime = convert_in_datetime(day + " "+actualMonth+" "+hours);
    if (window.XMLHttpRequest) { // for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else { // for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("idFiche").value = xmlhttp.responseText;
            document.getElementById("loader_modal").style.display = "none";
        }
        else if (xmlhttp.readyState < 4) {
            document.getElementById("loader_modal").style.display = "block";
        }
    };
    xmlhttp.open("GET", path +"?datetime=" + dateTime + "&domain=" + domain, false);
    xmlhttp.send();
}

/**
 * open the modal for technical sheet and send to the controller to reserve schedule for 10minutes
 * @param schedule -> choosen schedule
 * @param path  -> to the controller
 */
function get_technical_sheet(path, id_fiche) {
    var xmlhttp;
    var popup = new Foundation.Reveal($('#modal-fiche-intervention'));

    document.getElementById("home_type").value = "";
    document.getElementById("issue").value = "";
    popup.open();
    if (window.XMLHttpRequest) { // for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else { // for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var infos = JSON.parse(xmlhttp.responseText);
            document.getElementById("home_type").value = infos.habitation;
            document.getElementById("issue").value = infos.rapport;
            document.getElementById("loader_modal").style.display = "none";
        }
        else if (xmlhttp.readyState < 4) {
            document.getElementById("loader_modal").style.display = "block";
        }
    };
    xmlhttp.open("GET", path +"?id=" + id_fiche, false);
    xmlhttp.send();
}

/**
 * convert a litteral date string in a DateTime string
 * @param stringDate
 * @returns {string}
 */
function convert_in_datetime(stringDate) {
    var split = stringDate.split(" ");
    var months = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre"];
    var month = add_zero(months.indexOf(split[2]) + 1);
    var hour = "00";
    var second = "00";
    if (split.length > 4) {
        var hours = split[4];
        var split_hours = hours.split("-");
        split_hours = split_hours[0].split("h");
        hour = add_zero(split_hours[0]);
        second = (split_hours[1] == "") ? "00" : split_hours[1];
    }
    return(split[3] + "-" + month + "-" + split[1] + " " + hour + ":" + second);
}

/**
 * add a zero if the number is < to ten
 * @param number
 * @returns {*}
 */
function add_zero(number) {
    if (number < 10)
        return ("0" + number);
    else return number;
}


/**
 * get the reservation table in order to the choosen domain and the choosen week
 * @param domain
 * @param path for the php function
 */
function display_available_reservations(domain, path, path2) {
    var xmlhttp;
    var actualMonth = document.getElementById("actual-month").innerHTML;
    var day = document.getElementById("planning-table").firstElementChild.children[0].cells[1].children[1].innerHTML;
    var dateTime = convert_in_datetime(day + " " + actualMonth);

    if (window.XMLHttpRequest) { // for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else { // for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("planning-table").getElementsByTagName("tbody")[0].innerHTML = "";
            var reservations = JSON.parse(xmlhttp.responseText);
            var lines = "";

	    $.each(reservations, function(hour, plannByHeure)
            {
                lines += "<tr><td>" + hour + "</td>";
                $.each(plannByHeure , function(index, trancheHoraire){
                    $.each(trancheHoraire, function(indexTranche, Horaire){
                        if (Horaire != 0)
                            lines += '<td class="available" onclick="open_technical_sheet(this, \'' + path2 + '\');">' + Horaire + "</td>";
                        else
                            lines += "<td />";
                    });
                    lines += "<tr><td></td>";
		        });
            });
            document.getElementById("planning-table").getElementsByTagName("tbody")[0].innerHTML = lines;
            document.getElementById("loader").style.display = "none";
	    }
        else if (xmlhttp.readyState < 4) {
            document.getElementById("loader").style.display = "block";
        }
    };
    xmlhttp.open("GET", path +"?datetime=" + dateTime + "&domain=" + domain, false);
    xmlhttp.send();
}

//fonction appele quand une fenetre est charger
//if (document.getElementById('flag_recharge')){
//	var domain = 'plomberie' //document.getElementById("selected_job").innerHTML;
//	open_table(document.getElementById(domain), "/web/app_dev.php/get_reservations", "/web/app_dev.php/save_reservation");
//}
