function runTime() {
    var days, hours, minutes, seconds;
    var openday = new Date('2020/01/08 10:00');
    var today = new Date();
    var total = (today.getTime()-openday.getTime())/1000;
    days=Math.floor(total/86400);
    total=total-days*86400;
    hours=Math.floor(total/3600);
    total=total-hours*3600;
    minutes=Math.floor(total/60);
    total=total-minutes*60;
    seconds=Math.floor(total);
    timeString = days+"天"+hours+"时"+minutes+"分"+seconds+"秒";
    document.getElementById("runTime").innerHTML = timeString;
    window.setTimeout("runTime();", 1000);
}
window.onload = runTime;

document.addEventListener(
    'visibilitychange',
    function(){
        if(document.visibilityState=='hidden')
        {normal_title=document.title;document.title='在看什么呢?';}
        else{document.title=normal_title;}});