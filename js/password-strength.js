const passwordInput = document.getElementById('password');
const passwordStrength = document.getElementById('password-strength');

passwordInput.addEventListener('input', () => {
  const password = passwordInput.value;
  const strength = calculatePasswordStrength(password);
  const strengthText = getStrengthText(strength);
  const strengthClass = getStrengthClass(strength);

  passwordStrength.textContent = strengthText;
  passwordStrength.className = strengthClass;
});

function calculatePasswordStrength(password) {
  // Add your password strength calculation logic here
  // Example: Check for length, uppercase, lowercase, numbers, and special characters
  let strength = 0;

  if (password.length >= 8) {
    strength++;
  }
  if (/[a-z]/.test(password)) {
    strength++;
  }
  if (/[A-Z]/.test(password)) {
    strength++;
  }
  if (/[0-9]/.test(password)) {
    strength++;
  }
  if (/[!@#$%^&*]/.test(password)) {
    strength++;
  }

  return strength;
}

function getStrengthText(strength) {
  switch (strength) {
    case 0:
      return '';
    case 1:
      return 'Weak';
    case 2:
      return 'Fair';
    case 3:
      return 'Good';
    case 4:
      return 'Strong';
    case 5:
      return 'Very Strong';
    default:
      return '';
  }
}

function getStrengthClass(strength) {
  switch (strength) {
    case 0:
      return '';
    case 1:
      return 'weak';
    case 2:
      return 'fair';
    case 3:
      return 'good';
    case 4:
      return 'strong';
    case 5:
      return 'very-strong';
    default:
      return '';
  }
}
