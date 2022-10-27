/* V3 A REVOIR
let see = document.getElementsById('see');

see.addEventListener("click", ()=>{
    let mdpUser = document.getElementsByClassName('mdp')
        for(let i = 0; i < mdpUser.length; i++){
            if (mdpUser[i].type == 'password') {
                mdpUser[i].type = 'text';
            }else{
                mdpUser[i].type = 'password';
            }
        }
})*/


//V2 OK
function showPassword(){
    let mdpUser = document.getElementsByClassName('mdp')
        for(let i = 0; i < mdpUser.length; i++){
            if (mdpUser[i].type == 'password') {
                mdpUser[i].type = 'text';
            }else{
                mdpUser[i].type = 'password';
            }
        }
}


/* V1 OK
    let mdpUser = document.getElementsByClassName('mdp');

    seePassword = () =>{
        for(let i = 0; i < mdpUser.length; i++){
            if (mdpUser[i].type == 'password') {
                mdpUser[i].type = 'text';
            }else{
                mdpUser[i].type = 'password';
            }
        }
    }
*/