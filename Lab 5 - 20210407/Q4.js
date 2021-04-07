function prettyPrint(obj){
    Object.entries(obj).forEach(([key,value]) => {
        console.log(key+": "+value);
    });
}

prettyPrint({name: "Rusty", species: "dog", breed: "mutt"});
