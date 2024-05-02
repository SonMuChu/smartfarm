const clock = document.querySelector(".clock"); 


function getClock() {
    const time = new Date();
    const hours = String(time.getHours()).padStart(2, "0");
    const minutes = String(time.getMinutes()).padStart(2, "0");
    const seconds = String(time.getSeconds()).padStart(2, "0");
	const todaydate = new Date();
    const days = ['일요일', '월요일', '화요일', '수요일', '목요일', '금요일', '토요일'];
    const days_num = todaydate.getDay();

    const year = todaydate.getFullYear();
    const month = todaydate.getMonth() + 1;
    const date = todaydate.getDate();
    const day = days[days_num];

    clock.innerText = `${year}년 ${month}월 ${date}일 ${day} ${hours}:${minutes}:${seconds} `;
}

getClock(); 
setInterval(getClock, 1000); 

