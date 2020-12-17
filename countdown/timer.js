const deaadline = '01/01/2021';

const getTimeRemaining = () => {
  const total = Date.parse(deaadline) - Date.parse(new Date());
  const seconds = Math.floor((total / 1000) % 60);
  const minutes = Math.floor((total / 1000 / 60) % 60);
  const hours = Math.floor((total / (1000 * 60 * 60)) % 24);
  const days = Math.floor(total / (1000 * 60 * 60 * 24));
  return {
    total, days, hours, minutes, seconds
  };
}

function initializeTime(id, endtime) {
  const clock = document.getElementById('time-here');
  const timeInterval = (() => {
    const t = getTimeRemaining(endtime);

    clock.innerHTML =
      
      'days: ' + t.days + '<br>';
      'hours: ' + t.hours + '<br>';
      'minutes: ' + t.minutes + '<br>';
    'seconds: ' + t.seconds + '<br>';    
    
    if (t.total <= 0) {
      clearInterval(timeInterval);
    }
  }, 1000);
}


// countdown.innerHTML = getTimeRemaining(deaadline).minutes;