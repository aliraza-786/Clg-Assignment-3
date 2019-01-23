

function check()
{
    var year = document.getElementById("year").value;
    var week = document.getElementById("week").value;
    if( year < 0 || year.length.value === 0){
        alert("Invalid Information for Year");
    }
    if( week > 52 || week <1 week.length.value === 0 ){
        alert("Invalid Information for Weeks")
    }
}