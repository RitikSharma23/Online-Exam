l=0;
res={}
ss=new XMLHttpRequest
ss.open("GET","panel.php",true)
ss.onload=function(){
res=JSON.parse(this.responseText)

console.log(res['data'][1]);
l=res['data'].length;



div=document.getElementById("div1")
table=document.createElement('table')
table.border="1"



for(i=0;i<res['data'].length;i++){

var check=document.createElement("input");
check.type = "checkbox";
check.id=i
check.value=i
check.name=i
check.classList="messageCheckbox"

row=document.createElement('tr')
td=document.createElement('td')
td.appendChild(check)
row.appendChild(td)


td0=document.createElement('td')
text0=document.createTextNode(res['data'][i]['user'])
td0.appendChild(text0)





td1=document.createElement('td')
text1=document.createTextNode(res['data'][i]['date'])
td1.appendChild(text1)

td2=document.createElement('td')
text2=document.createTextNode(res['data'][i]['question_id'])
td2.appendChild(text2)

td3=document.createElement('td')
text3=document.createTextNode(res['data'][i]['sem'])
td3.appendChild(text3)

td4=document.createElement('td')
text4=document.createTextNode(res['data'][i]['dev'])
td4.appendChild(text4)

td5=document.createElement('td')
text5=document.createTextNode(res['data'][i]['subject'])
td5.appendChild(text5)

td6=document.createElement('td')
text6=document.createTextNode(res['data'][i]['unit'])
td6.appendChild(text6)

td7=document.createElement('td')
text7=document.createTextNode(res['data'][i]['total'])
td7.appendChild(text7)

td8=document.createElement('td')
text8=document.createTextNode(res['data'][i]['status'])
td8.appendChild(text8)

td9=document.createElement('td')
var a=document.createElement('a')
a.href="modify.php?id="+res['data'][i]['question_id']
text9=document.createTextNode('Edit')
a.appendChild(text9)
td9.appendChild(a)


row.appendChild(td0)
row.appendChild(td1)
row.appendChild(td2)
row.appendChild(td3)
row.appendChild(td4)
row.appendChild(td5)
row.appendChild(td6)
row.appendChild(td7)
row.appendChild(td8)
row.appendChild(td9)
table.appendChild(row)
div.appendChild(table)

}






}
ss.send()


document.getElementById("start").addEventListener("click",()=>{
    window.location.reload()

    chec=[]
    var checkedValue = null; 
    var inputElements = document.getElementsByClassName('messageCheckbox');
    for(var i=0; inputElements[i]; ++i){
          if(inputElements[i].checked){
            //    chec.push(inputElements[i].value);
               chec.push(res['data'][i]['question_id']);
          }
    }

    for(i=0;i<chec.length;i++){
        // alert(chec[i])
            ss=new XMLHttpRequest
            ss.open("GET","start.php?id="+chec[i],true)
            ss.onload=function(){
            res=this.responseText
        }
        ss.send()
    }
    window.location.reload()

    
})


document.getElementById("stop").addEventListener("click",()=>{
    window.location.reload()

    chec=[]
    var checkedValue = null; 
    var inputElements = document.getElementsByClassName('messageCheckbox');
    for(var i=0; inputElements[i]; ++i){
          if(inputElements[i].checked){
            //    chec.push(inputElements[i].value);
               chec.push(res['data'][i]['question_id']);
          }
    }

    for(i=0;i<chec.length;i++){
        // alert(chec[i])
            ss=new XMLHttpRequest
            ss.open("GET","stop.php?id="+chec[i],true)
            ss.onload=function(){
            res=this.responseText
        }
        ss.send()
    }

    window.location.reload()
    
})




document.getElementById("delete").addEventListener("click",()=>{
    window.location.reload()

    chec=[]
    var checkedValue = null; 
    var inputElements = document.getElementsByClassName('messageCheckbox');
    for(var i=0; inputElements[i]; ++i){
          if(inputElements[i].checked){
            //    chec.push(inputElements[i].value);
               chec.push(res['data'][i]['question_id']);
          }
    }

    for(i=0;i<chec.length;i++){
        // alert(chec[i])
            ss=new XMLHttpRequest
            ss.open("GET","delete.php?id="+chec[i],true)
            ss.onload=function(){
            res=this.responseText
        }
        ss.send()
    }

    window.location.reload()
    
})


