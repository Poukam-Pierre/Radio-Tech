let play = document.querySelector('#play');
let title = document.querySelector('#title');
let volume_show = document.querySelector('#volume-show');
let recent_volume = document.querySelector('#volume');
let share = document.querySelector('#partage'); // récupération de l'id partage dans le landing

let playing_song = false;
let index_no = 0;
document.getElementById('volume-show').innerHTML='50%'
document.getElementById('volume').innerHTML='50'
//create a audio Element
let track = document.createElement('audio');
track.volume=0.5
let volumeBeforeMute = 0.5
let isMute = false

let list_song = [
    {
        path:"https://aod-rfi.akamaized.net/rfi/francais/audio/modules/actu/202111/7h15_24_11_21_Le_grand_relachement.mp3?dl=1"
        // path:"../test_song.mp3"
    }
];
/* In option we can have all informations about a programme at the time. Like 
   name of presentator and his image,name of emission, beginning time, end time and an image of these presentator

    let All_infos =[
      {
          name:"",
          image:"",
          emissionName:"",
          starTime:"",
          endTime:""
      }
    ]
*/ 


//functions

    //function load the track
function load_track(index_no){
    track.src = list_song[index_no].path ;
    track.load();
}
// load_track(index_no);

//change volume icon
let changeVolumeIcon=(toVolumeUp)=>{
    if(!toVolumeUp){
        document.getElementById('volume-icon').classList.remove('fa-volume-up')
        document.getElementById('volume-icon').classList.add('fa-volume-off')
    }
    else{
        if(volumeBeforeMute!=='0' || (!isMute && volumeBeforeMute==='0')){
            document.getElementById('volume-icon').classList.remove('fa-volume-off')
            document.getElementById('volume-icon').classList.add('fa-volume-up')
        }
    }
}

    //mute sound
function mute_sound(){
    if(isMute){
        track.volume = volumeBeforeMute/100;
        volume.value = volumeBeforeMute;
        volume_show.innerHTML = volumeBeforeMute+'%';
        changeVolumeIcon(isMute)
        isMute=false
    }
    else{
        changeVolumeIcon(isMute)
        isMute=true
        volumeBeforeMute = volume.value
        track.volume = 0;
        volume.value = 0;
        volume_show.innerHTML = '0%';
    }
}
    //just play 
function justplay(){
    if(playing_song==false){ 
        playsong();
    }else{
        pausesong();
    }
}

    //play song
function playsong(){
    load_track(index_no);
    play.innerHTML = '<i class="fa fa-refresh fa-spin"></i>';
    setTimeout(function(){ // wait 8s to play flux audio streaming
        track.play();
        playing_song = true;
        play.innerHTML = '<i class="fa fa-pause"></i>';
    }, 3000);  
}

    // pause song
function pausesong(){
    track.pause();
    track.cur;
    playing_song = false;
    play.innerHTML = '<i class="fa fa-play"></i>';
}


//change volume icon when volume change
let changeVolumeIconOnVolumeChange=()=>{
    let isVolumeUp = document.getElementById('volume-icon').classList.contains('fa-volume-up')
    if(volume.value==='0' && isVolumeUp) changeVolumeIcon(false)
    else changeVolumeIcon(true)
}

    //change volume
function volume_change(event){
    let newVolume = event.target.value
    volume_show.innerHTML = newVolume+'%'
    track.volume = newVolume/100;
    if(isMute && newVolume!==0)isMute=false
    changeVolumeIconOnVolumeChange()
}
    // sharing url to another
share.addEventListener('click', function(event){
    var cpLink = document.createElement('input'),
        text = window.location.href;
    
    document.body.appendChild(cpLink);
    cpLink.value = text;
    cpLink.select();
    document.execCommand('copy');
    document.body.removeChild(cpLink);
});
// Activation of boostrap toast
$(document).ready(function(){
    $("#partage").click(function(){
        $('.toast-body').html("URL copied....")
        $('.toast').toast('show');
    });
    $("#vote-player").click(function(){
        $('.toast-body').html("Emission liked....")
        $('.toast').toast('show');
    });
});