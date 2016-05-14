var year = 0; var mingo = 1911;

function check(format) 
{
    document.getElementById("output").value = format; 
var fmt = document.getElementById("format").value;
    if (fmt == "mingo")
    {
        document.getElementById("output").innerHTML = "M";
    }
    else if (fmt == "grego")
    {
        document.getElementById("output").innerHTML = "G";
    }
    else
    {
        document.getElementById("output").innerHTML = "Choose one please";
    }
}
