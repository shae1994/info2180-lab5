$(document).ready(function() {

    $("form").submit(function(e) {
        e.preventDefault();
        
        $("#lookup").click(function(){
            $(this).val('lookup');
            rawInput = document.getElementById("country").value;
            vari = rawInput.replace(/[^a-z0-9\s]/gi, '')
            res=document.querySelector("#result");
                
            })
            fetch('http://localhost/info2180-lab5/world.php'+'?country='+vari)
                .then(function(responseText){
                    if(responseText.ok){
                        return(responseText.text());
                    }else{
                        alert("Error.");
                        Promise.reject();
                        console.log("Failed.")
                    } 
                })
                .then(function(d){
                    console.log(d);
                        res.innerHTML=d;
                    })
                });

        $("#cities").click(function(){
            $(this).val('cities');
            rawInput = document.getElementById("country").value;
            vari = rawInput.replace(/[^a-z0-9\s]/gi, '')
            res=document.querySelector("#result");
            fetch('http://localhost/info2180-lab5/world.php'+'?country='+vari+'&context=')
                .then(function(responseText){
                    if(responseText.ok){
                        return(responseText.text());
                    }else{
                        alert("Error.");
                        Promise.reject();
                        console.log("Failed.")
                    } 
                })
                .then(function(d){
                    console.log(d);
                        res.innerHTML=d;
                    })
                });
    
});