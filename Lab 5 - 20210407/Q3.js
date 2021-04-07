class Movie{
    constructor(title, rating, hasWatched){
        this.title = title;
        this.rating = rating;
        this.hasWatched = hasWatched;
    }

    print(){
        console.log("You have "+(this.hasWatched?"":"not ")+"seen \""+this.title+"\" - "+this.rating+" stars");
    }
}

var movieList = [];
movieList.push(new Movie("In Bruges","5",true));
movieList.push(new Movie("Frozen","4.5",false));
movieList.push(new Movie("Mad Max Fury Road","5",true));
movieList.push(new Movie("Les Miserables","3.5",false));
movieList.forEach((movie)=>{
    movie.print();
})