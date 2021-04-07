printReverse([1,2,3,4]);
printReverse(["a","b"]);

function printReverse(array){
    for(let i=array.length-1;i>=0;i--){
        console.log(array[i]);
    }
}