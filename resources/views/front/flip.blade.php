@extends('layouts.frontLayout.main')

@section('child')

<div class="flip">

<button class="btnn" id="prev-btn">
    <i class="fas fa-arrow-left"></i>
</button>

<div id="book" class="book">
    <div id="p1" class="paper">
        <div class="front">
            <div id="f1" class="front-content">
                <h1>Front 1</h1>
            </div>
        </div>
        <div class="back">
            <div id="b1" class="back-content">
                <h1>Back 1</h1>
            </div>
        </div>
    </div>
    <div id="p2" class="paper">
        <div class="front">
            <div id="f2" class="front-content">
                <h1>Front 2</h1>
            </div>
        </div>
        <div class="back">
            <div id="b2" class="back-content">
                <h1>Back 2</h1>
            </div>
        </div>
    </div>
    <div id="p3" class="paper">
        <div class="front">
            <div id="f3" class="front-content">
                <h1>Front 3</h1>
            </div>
        </div>
        <div class="back">
            <div id="b3" class="back-content">
                <h1>Back 3</h1>
            </div>
        </div>
    </div>
</div>

<button class="btnn" id="next-btn">
    <i class="fas fa-arrow-right"></i>
</button>

</div>

<script>
const prevBtn = document.querySelector("#prev-btn");
const nextBtn = document.querySelector("#next-btn");
const book = document.querySelector("#book");

const paper1 = document.querySelector("#p1");
const paper2 = document.querySelector("#p2");
const paper3 = document.querySelector("#p3");

prevBtn.addEventListener("click", goPrevPage);
nextBtn.addEventListener("click", goNextPage);

let currentLocation = 1;
let numOfPapers = 3;
let maxLocation = numOfPapers + 1;

function openBook() {
    book.style.transform = "translateX(50%)";
    prevBtn.style.transform = "translateX(-180px)";
    nextBtn.style.transform = "translateX(180px)";
}

function closeBook(isAtBeginning) {
    if(isAtBeginning) {
        book.style.transform = "translateX(0%)";
    } else {
        book.style.transform = "translateX(100%)";
    }
    
    prevBtn.style.transform = "translateX(0px)";
    nextBtn.style.transform = "translateX(0px)";
}

function goNextPage() {
    if(currentLocation < maxLocation) {
        switch(currentLocation) {
            case 1:
                openBook();
                paper1.classList.add("flipped");
                paper1.style.zIndex = 1;
                break;
            case 2:
                paper2.classList.add("flipped");
                paper2.style.zIndex = 3;
                break;
            case 3:
                paper3.classList.add("flipped");
                paper3.style.zIndex = 3;
                closeBook();
                break;
            default:
                throw new Error("unknow state");
        }
        currentLocation++;
    }
    
}

function goPrevPage() {
    if(currentLocation > 1) {
        switch(currentLocation) {
            case 2:
                closeBook(true);
                paper1.classList.remove("flipped");
                paper1.style.zIndex = 3;
                break;
            case 3:
                paper2.classList.remove("flipped");
                paper2.style.zIndex = 2;
                break;
            case 4:
                openBook();
                paper3.classList.remove("flipped");
                paper3.style.zIndex = 1;
                break;
            default:
                throw new Error("unkown state");
        }

        currentLocation--;
    }
}

</script>

@endsection