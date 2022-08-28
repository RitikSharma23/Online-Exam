data=[[]];
sem=[];
subject=[];
unit=[];
function removeDuplicates(arr) {
    return arr.filter((item,
        index) => arr.indexOf(item) === index);
}

semester=sbj=uni=0

function column(){
    var c = [];
    ss=new XMLHttpRequest
    ss.open("GET","column.php",true)
    ss.onload=function(){
        res=JSON.parse(this.responseText)
        var count = Object.keys(res['data']).length;

    

        for(i=8;i<count;i++){
                c[i-8]=res['data'][i].col;   
                data[i-8]= c[i-8].split("_");
        }


        for(i=0;i<data.length;i++){
            sem[i]=data[i][1]
        }
        sem=removeDuplicates(sem)

    
        for(i=0;i<sem.length;i++){
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
        input.type="number";
        input.name="sem";
        input.value="othersem";
        input.id="othersem";
        label=document.createTextNode(" Other : ")
        input.appendChild(label)
        semm=document.getElementById("sem")
        semm.appendChild(label)
        semm.appendChild(input)

    }
    ss.send()
}


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
    for(i=0;i<data.length;i++){
        if(data[i][1]==semester){
        subject.push(data[i][2])
        }
    }

    console.log(subject)

    subject=removeDuplicates(subject)
        for(i=0;i<subject.length;i++){
        input=document.createElement("input");
        input.type="radio";
        input.name="subjects";
        input.id=subject[i];
        input.value=subject[i];
        label=document.createTextNode(subject[i])
        input.appendChild(label)
        sem=document.getElementById("sub")
        sem.appendChild(input)
        sem.appendChild(label)
        }
    
        input=document.createElement("input");
        input.type="text";
        input.name="subjects";
        input.id="othersub";
       
        label=document.createTextNode(" Other : ")
        input.appendChild(label)
        sem=document.getElementById("sub")
        sem.appendChild(label)
        sem.appendChild(input)

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


})


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

    document.getElementById("total").innerHTML="sem_"+semester+"_"+sbj+"_unit_"+uni;


})

