document.addEventListener('DOMContentLoaded', () => {
    const schedules = {
      heavy: [
        '08:00 AM - High-Intensity Workout',
        '10:00 AM - High-Calorie Breakfast',
        '01:00 PM - Protein-Rich Lunch',
        '07:00 PM - Full Dinner',
      ],
      normal: [
        '08:00 AM - Light Exercise',
        '09:00 AM - Balanced Breakfast',
        '12:30 PM - Moderate Lunch',
        '06:30 PM - Light Dinner',
      ],
      light: [
        '08:00 AM - Yoga or Stretching',
        '09:30 AM - Light Breakfast',
        '01:00 PM - Low-Calorie Lunch',
        '06:00 PM - Snack-Size Dinner',
      ],
    };
  
    const scheduleContainer = document.querySelector('.schedule-container');
    const dropdown = document.createElement('select');
    dropdown.id = 'schedule-type';
    dropdown.innerHTML = `
      <option value="heavy">Heavy</option>
      <option value="normal">Normal</option>
      <option value="light">Light</option>
    `;
    scheduleContainer.parentElement.prepend(dropdown);
  
    const renderSchedule = (type) => {
      scheduleContainer.innerHTML = `
        <h3>${type.charAt(0).toUpperCase() + type.slice(1)} Schedule</h3>
        <ul>${schedules[type].map((item) => `<li>${item}</li>`).join('')}</ul>
      `;
    };
  
    dropdown.addEventListener('change', (e) => {
      renderSchedule(e.target.value);
    });
  
    renderSchedule('heavy'); // Default
  });
  