const rows = 40;
const cols = 40;
let running=false;
let timer;
let evolutionSpeed=1000;                //one sec per animation
let gen_num=0;                          //generation counter
let curr =[rows];
let next =[rows];

// makes 2D array
function make_array() {
    for (let i = 0; i < rows; i++) {
        curr[i] = new Array(cols);
        next[i] = new Array(cols);

    }
}
function fill_arrays() {
    for (let i = 0; i < rows; i++) {
        for (let j = 0; j < cols; j++) {
            curr[i][j] = 0;
            next[i][j] = 0;
        }
    }
}

function draw_grid() {
    let grid = document.querySelector('#grid');
    let table = document.createElement('table');


    for (let i = 0; i < rows; i++) {
        let tr = document.createElement('tr');
        for (let j = 0; j < cols; j++) {
            let cell = document.createElement('td');
            cell.setAttribute('id', i + '_' + j);
            cell.setAttribute('class', 'dead');
            cell.addEventListener('click',on_click);
            tr.appendChild(cell);
        }
        table.appendChild(tr);
    }
    grid.appendChild(table);
}

function on_click() {
    let cells = this.id.split("_");
    let row = Number(cells[0]);
    let col = Number(cells[1]);

    // Toggle cell alive or dead
    if (this.className==='alive'){
        this.setAttribute("class", "dead");
        curr[row][col] = 0;
    }else{
        this.setAttribute("class", "alive");
        curr[row][col] = 1;
    }

}

//applying game rules
function rules() {
    for (var x=0;x<curr.length;x++) {
        for (var y=0;y<curr[x].length;y++) {
            let neighbors = count_neighbor(x, y);

            if (curr[x][y] === 1) {

                if (neighbors < 2) {                                //underpopulation
                    next[x][y] = 0;
                } else if (neighbors === 2 || neighbors === 3) {    //lives
                    next[x][y] = 1;
                } else if (neighbors > 3) {                         //overpopulation
                    next[x][y] = 0;
                }
            } else if (curr[x][y] === 0) {
                if (neighbors === 3) {                              //lives
                    next[x][y] = 1;
                }
            }
        }
    }
}

/*
[x-1][y]
[x][y-1]
[x-1][y-1]
[x+1][y]
[x][y+1]
[x+1][y+1]
[x+1][y-1]
[x-1][y+1]
 */
//checks if element is an edge then checks for neighbors
function count_neighbor(x, y) {
    var neighbors = 0;

    if (x - 1 >= 0) {
        if (curr[x - 1][y] === 1)
            neighbors++;
    }
    if (x- 1 >= 0 && y - 1 >= 0) {
        if (curr[x - 1][y - 1] === 1)
            neighbors++;
    }
    if (x - 1 >= 0 && y + 1 < cols) {
        if (curr[x- 1][y + 1] === 1)
            neighbors++;
    }
    if (y - 1 >= 0) {
        if (curr[x][y - 1] === 1)
            neighbors++;
    }
    if (y + 1 < cols) {
        if (curr[x][y + 1] === 1)
            neighbors++;
    }
    if (x + 1 < rows && y - 1 >= 0) {
        if (curr[x + 1][y - 1] === 1)
            neighbors++;
    }
    if (x + 1 < rows && y + 1 < cols) {
        if (curr[x + 1][y + 1] === 1)
            neighbors++;
    }
    if (x+ 1 < rows) {
        if (curr[x + 1][y] === 1)
            neighbors++;
    }

    return neighbors;
}

function set_next() {
    for (var x=0;x<curr.length;x++) {
        for (var y=0;y<curr[x].length;y++) {
            curr[x][y] = next[x][y]; //curr becomes next
            next[x][y] = 0; //clearing next
        }
    }

}
// # of alive cells on grid
function curr_pop(){
    var pop=0;
    for (let i = 0; i < rows; i++) {
        for (let j = 0; j < cols; j++) {
            if(curr[i][j]===1){
                pop++;
            }
        }
    }
    document.getElementById("pop").innerHTML = pop;
}

function updategrid() {
    let cell='';
    for (var x=0;x<curr.length;x++) {
        for (var y=0;y<curr[x].length;y++) {
            cell = document.getElementById(x + '_' + y);
            if (curr[x][y] === 0) {
                cell.setAttribute("class", "dead");
            } else {
                cell.setAttribute("class", "alive");
            }
        }
    }
}

function faster(){
    let speed=document.querySelector('#faster');
    if (speed){
        evolutionSpeed=evolutionSpeed-150;
    }
}

function run_game(){
    gen_num=gen_num+1;
    rules();
    set_next();
    updategrid();
    if (running) {
        timer = setTimeout(run_game, evolutionSpeed);
    }
    num_gen();
    curr_pop();

}
// # of generations played
function num_gen(){
    document.getElementById("gen").innerHTML = gen_num;
}

function start_stop(){
    let run_state=document.querySelector('#btnstartstop');
    if (!running) {
        running = true;
        run_state.value='Stop';
        run_game();

    } else {
        running = false;
        run_state.value='Start';
        clearTimeout(timer);
    }
}


function resetgrid() {
    location.reload();

}
// running once or 23 times
function two3times(){

    var i=0;
    while(i!==24){
        run_game();
        i++;
    }

}
function onetime(){
    var i=0;
    while(i!==2){
        run_game();
        i++;
    }
}
//creating shapes of block, oscillator and glider
function blinker(){
    fill_arrays();
    let y=Math.floor((Math.random() * cols-1) + 1);
    let x=Math.floor((Math.random() * rows-1) + 1);
    next[x][y]=1;
    next[x+1][y]=1;
    next[x+2][y]=1;
    run_game();
}
function still_life(){
    fill_arrays();
    let y=Math.floor((Math.random() * cols-1) + 1);
    let x=Math.floor((Math.random() * rows-1) + 1);
    next[x][y]=1;
    next[x+1][y]=1;
    next[x][y+1]=1;
    next[x+1][y+1]=1;
    run_game();
}

function beacon(){
    fill_arrays();
    let y=Math.floor((Math.random() * cols-1) + 1);
    let x=Math.floor((Math.random() * rows-1) + 1);
    next[x][y]=1;
    next[x+1][y]=1;
    next[x][y-1]=1;
    next[x+3][y-3]=1;
   next[x+3][y-2]=1;
    next[x+2][y-3]=1;
    run_game();
}
function glider(){
    fill_arrays();
    let y=Math.floor((Math.random() * cols-1) + 1);
    let x=Math.floor((Math.random() * rows-1) + 1);
    next[x][y]=1;
    next[x+1][y]=1;
    next[x+2][y]=1;
    next[x+2][y+1]=1;
    next[x+1][y+2]=1;
    run_game();
}


window.onload=()=>{
    draw_grid();// The visual table
    make_array();// current and next generations
    fill_arrays();//Set all array locations to 0=dead

}