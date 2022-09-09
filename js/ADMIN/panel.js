
fname=document.getElementById("fname").innerHTML;
lname=document.getElementById("lname").innerHTML;
email=document.getElementById("email").innerHTML;
phone=document.getElementById("phone").innerHTML;
details="&fname="+fname+"&lname="+lname+"&email="+email+"&phone="+phone;    


l=0;
res={}
ss=new XMLHttpRequest
ss.open("GET","../api/dashboard.php?phone="+phone+"&obj=1",true)
ss.onload=function(){
res=JSON.parse(this.responseText)

console.log(res['data'][1]);
l=res['data'].length;


div=document.getElementById("div1")
if(l>=1){
    div.innerHTML=""
}
table=document.createElement('table')
table.border="1"

i=0;





var check=document.createElement("input");
check.type = "checkbox";
check.id=i
check.value=i
check.name=i
check.classList="messageCheckbox"

row=document.createElement('tr')
td=document.createElement('td')
// td.appendChild(check)
row.appendChild(td)

td1=document.createElement('td')
text1=document.createTextNode("Date")
td1.appendChild(text1)

td3=document.createElement('td')
text3=document.createTextNode("SEM")
td3.appendChild(text3)

td4=document.createElement('td')
text4=document.createTextNode("DIV")
td4.appendChild(text4)

td5=document.createElement('td')
text5=document.createTextNode("Subject")
td5.appendChild(text5)

td6=document.createElement('td')
text6=document.createTextNode("Unit")
td6.appendChild(text6)

td7=document.createElement('td')
text7=document.createTextNode("Total Que.")
td7.appendChild(text7)

td8=document.createElement('td')
text8=document.createTextNode("Curr. Status")
td8.appendChild(text8)

td9=document.createElement('td')
var a=document.createElement('a')
a.href="edit.php?id="+res['data'][i]['question_id']
text9=document.createTextNode('')
a.appendChild(text9)
td9.appendChild(a)

td2=document.createElement('td')
var a=document.createElement('a')
a.href="edit.php?id="+res['data'][i]['question_id']
text2=document.createTextNode('')
a.appendChild(text2)
td2.appendChild(a)


// row.appendChild(td0)
row.appendChild(td1)
row.appendChild(td3)
row.appendChild(td4)
row.appendChild(td5)
row.appendChild(td6)
row.appendChild(td7)
row.appendChild(td8)
row.appendChild(td9)
row.appendChild(td2)
table.appendChild(row)
div.appendChild(table)








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
a.href="edit.php?id="+res['data'][i]['question_id']+details
text9=document.createTextNode('Edit')
a.appendChild(text9)
td9.appendChild(a)

td2=document.createElement('td')
var a=document.createElement('a')
a.href="result.php?sem="+res['data'][i]['sem']+"&dev="+res['data'][i]['dev']+"&col=sem_"+res['data'][i]['sem']+"_"+res['data'][i]['subject']+"_unit_"+res['data'][i]['unit']
text2=document.createTextNode('View Result')
a.appendChild(text2)
td2.appendChild(a)


// row.appendChild(td0)
row.appendChild(td1)
// row.appendChild(td2)
row.appendChild(td3)
row.appendChild(td4)
row.appendChild(td5)
row.appendChild(td6)
row.appendChild(td7)
row.appendChild(td8)
row.appendChild(td9)
row.appendChild(td2)
table.appendChild(row)
div.appendChild(table)

}






}
ss.send()


document.getElementById("start").addEventListener("click",()=>{
    window.location.reload()
    chec=[];
    sem=[];
    div=[];
    subject=[];
    unit=[];
    var checkedValue = null; 
    var inputElements = document.getElementsByClassName('messageCheckbox');
    for(var i=0; inputElements[i]; ++i){
          if(inputElements[i].checked){
            //    chec.push(inputElements[i].value);
               chec.push(res['data'][i]['question_id']);
               sem.push(res['data'][i]['sem']);
               div.push(res['data'][i]['dev']);
               subject.push(res['data'][i]['subject']);
               unit.push(res['data'][i]['unit']);
          }
    }

    for(i=0;i<chec.length;i++){
        // alert(chec[i])
            ss=new XMLHttpRequest
            ss.open("GET","../api/dashboard.php?id="+chec[i]+"&sem="+sem[i]+"&dev="+div[i]+"&sub="+subject[i]+"&unit="+unit[i]+"&obj=4",true)
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
            ss.open("GET","../api/dashboard.php?id="+chec[i]+"&obj=5",true)
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
            ss.open("GET","../api/dashboard.php?id="+chec[i]+"&obj=2",true)
            ss.onload=function(){
            res=this.responseText
        }
        ss.send()
    }

    window.location.reload()
    
})


