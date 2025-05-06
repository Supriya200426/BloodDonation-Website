const donorForm = document.getElementById('donorForm');
const alertsDiv = document.getElementById('alerts');

donorForm.addEventListener('submit', function(event) {
    event.preventDefault();
    const FullName = document.getElementById('FullName').value;
    const Email = document.getElementById('Email').value;
    const phone = document.getElementById('phone').value;
    const dob = document.getElementById('dob').value;
    const bloodType = document.getElementById('Bloodgroup').value;

    console.log('Donor Registered:', { FullName, Email, phone, dob, Bloodgroup });
    this.reset();
});

function fetchEmergencyAlerts() {

    const alerts = [
        { location: 'Downtown', bloodType: 'O+', urgency: 'High' },
        { location: 'Uptown', bloodType: 'A-', urgency: 'Medium' }
    ];

    const alertsDiv = document.getElementById('alerts');
    alerts.forEach(alert => {
        const alertElement = document.createElement('div');
        alertElement.textContent = `Urgent: ${alert.bloodType} needed to ${FullName} - Urgency: ${alert.urgency}`;
        alertsDiv.appendChild(alertElement);
    });
}
