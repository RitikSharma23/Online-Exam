



function column(){
    var c = [];
    ss=new XMLHttpRequest
    ss.open("GET","api/column.php",true)
    ss.onload=function(){
        res=JSON.parse(this.responseText)
        var count = Object.keys(res['data']).length;
        for(i=8;i<count;i++){
                c[i-8]=res['data'][i].col;   
                data[i-8]= c[i-8].split("_");
        }
        document.getElementById("exam").innerHTML=data;
    }
    ss.send()
}