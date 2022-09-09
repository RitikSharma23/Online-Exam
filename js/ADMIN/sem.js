data=[[]];
sem=[];
subject=[];
unit=[];
function removeDuplicates(arr) {
    return arr.filter((item,
        index) => arr.indexOf(item) === index);
}

semester=sbj=uni=0
var c = [];

fname="";
lname="";
email="";
phone="";
var details="";
fname=document.getElementById("fname").innerHTML;
lname=document.getElementById("lname").innerHTML;
email=document.getElementById("email").innerHTML;
phone=document.getElementById("phone").innerHTML;
details="&fname="+fname+"&lname="+lname+"&email="+email+"&phone="+phone+"&obj=1";    



function column(){
  
    ss=new XMLHttpRequest
    ss.open("GET","../api/question.php?obj=3",true)
    ss.onload=function(){
        res=JSON.parse(this.responseText)
        var count = Object.keys(res['data']).length;

        c = [];


        for(i=0;i<count;i++){
                c.push(res['data'][i].col);
                data[i]= c[i].split("_");
        }
        console.log(res['data'][0])
        console.log(data)

        for(i=0;i<data.length;i++){
            sem[i]=data[i][1]
        }
        sem=removeDuplicates(sem)

        console.log(sem)

    
        for(i=1;i<sem.length;i++){
        input=document.createElement("input");
        input.type="radio";
        input.name="sem";
        input.id=sem[i];
        input.value=sem[i];
        label=document.createTextNode(sem[i])
        input.appendChild(label)
        semm=document.getElementById("sem")
        semm.appendChild(input)
        semm.appendChild(label)
        }

        input=document.createElement("input");
        br=document.createElement("br");
        input.type="number";
        input.name="sem";
        input.value="othersem";
        input.id="othersem";
        label=document.createTextNode(" Other : ")
        input.appendChild(label)
        semm=document.getElementById("sem")
        semm.appendChild(br)

        semm.appendChild(label)
        semm.appendChild(input)

    }
    ss.send();

}

dev="";
document.getElementById("devision").addEventListener("click",()=>{
    for (const radioButton of document.querySelectorAll('input[name="dev"]')) {
        if (radioButton.checked) {
            dev = radioButton.value;
            break;
        }
    }
    console.log(dev);

    if(dev==""){
        alert("Plaese Select Division")
        document.getElementById("se").disabled=true;
    }else{
        document.getElementById("se").disabled=false;
    }
})


document.getElementById("se").addEventListener("click",()=>{
    ele=document.getElementsByName("sem");
    document.getElementById("sub").innerHTML = "Select Subject : <br><br>";
    subject=[];
    semester=0

    

    for(i = 0; i < ele.length; i++) {
        if(ele[i].checked)
        semester=(ele[i].value)
    }

    if(semester==0){
        semester=document.getElementById("othersem").value
    }

    if(semester==0 || semester==""){
        alert("please fill semester")
        document.getElementById("su").disabled=true
    }else{

    for(i=0;i<data.length;i++){
        if(data[i][1]==semester){
        subject.push(data[i][2])
        }
    }


    subject=removeDuplicates(subject)
        for(i=0;i<subject.length;i++){
        input=document.createElement("input");
        input.type="radio";
        input.name="subjects";
        input.id=subject[i];
        input.value=subject[i];
        label=document.createTextNode(subject[i])
        space=document.createTextNode("\n")
        input.appendChild(label)
        sem=document.getElementById("sub")
        sem.appendChild(space)
        sem.appendChild(input)
        sem.appendChild(label)
        }

        input=document.createElement("input");
        input.type="text";
        input.name="subjects";
        input.id="othersub";
        brr=document.createElement("br");
       
        label=document.createTextNode(" Other : ")
        // input.appendChild(brr)
        input.appendChild(label)
        sem=document.getElementById("sub")
        sem.appendChild(brr)
        sem.appendChild(label)
        sem.appendChild(input)

        document.getElementById("su").disabled=false

    }

})

document.getElementById("su").addEventListener("click",()=>{
    ele=document.getElementsByName("subjects");
    document.getElementById("unit").innerHTML = "Select Unit : <br><br>";
    unit=[]
    sbj=0;

    if(sbj==0){
        sbj=document.getElementById("othersub").value
    }


    for(i = 0; i < ele.length; i++) {
        if(ele[i].checked)
        sbj=(ele[i].value)
    }

    if(sbj==0 || sbj=="" || semester==0 || semester==""){
        alert("please fill Subject")
        document.getElementById("uni").disabled=true
    }else{

    for(i=0;i<data.length;i++){
        if(data[i][2]==sbj){
        unit.push(data[i][4])
        }
    }
    unit=removeDuplicates(unit)
    
        for(i=0;i<unit.length;i++){
        input=document.createElement("input");
        input.type="radio";
        input.name="units";
        input.id=unit[i];
        input.value=unit[i];
        label=document.createTextNode(unit[i])
        input.appendChild(label)
        sem=document.getElementById("unit")
        sem.appendChild(input)
        sem.appendChild(label)
        }

        input=document.createElement("input");
        input.type="number";
        input.name="units";
        input.id="otherunit";
        label=document.createTextNode(" Other : ")
        input.appendChild(label)
        sem=document.getElementById("unit")
        sem.appendChild(input)
        sem.appendChild(label)

        document.getElementById("uni").disabled=false

    }


})

var colname="";
document.getElementById("uni").addEventListener("click",()=>{
    ele=document.getElementsByName("units");
    uni=0

    if(uni==0){
        uni=document.getElementById("otherunit").value
    }

    for(i = 0; i < ele.length; i++) {
        if(ele[i].checked)
        uni=(ele[i].value)
    }

    if(uni==0 || uni=="" || sbj==0 || sbj=="" || semester==0 || semester==""){
        alert("please select Subject")
        document.getElementById("submit").disabled=true
    }else{

    if(semester==0 || semester==""){
        alert("please select semester")
    }else if(sbj==0 || sbj==""){
        alert("please select subject")
    }else if(uni==0 || uni==""){
        alert("please select unit")
    }else{

    colname="sem_"+semester+"_"+sbj+"_unit_"+uni;
    document.getElementById("total").innerHTML="Semister : "+semester+"<br>Subject : "+sbj+"<br>Unit : "+uni+"<br>Division : "+dev;

    document.getElementById("submit").disabled=false}

}
})

document.getElementById("submit").addEventListener("click",()=>{

    console.log(colname)

    flag=0;
    for(i=0;i<c.length;i++){
        if(c[i]==colname){
            flag=1;
            break;
        }else{
            flag=0
        }
    }

    if(flag==0){
    c.push(colname)
    }

    c=c.sort();

    console.log(c)

    for(i=0;i<c.length;i++){
        if(c[i]==colname){
            pos=i
            break;
        }
    }

    if(flag==0){
    ss=new XMLHttpRequest
    ss.open("GET","../api/question.php?column="+colname+"&pos="+c[pos-1]+"&obj=4",true)
    ss.onload=function(){
        res=(this.responseText)
    }
    ss.send();

  
}

console.log(details)
window.location.href = "question.php?"+details+"&sem="+semester+"&subject="+sbj+"&unit="+uni+"&dev="+dev+"&obj=1";  

})

