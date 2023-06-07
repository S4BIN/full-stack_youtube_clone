const passwordInput = document.querySelector('input[name="pwd"]');
const passwordStrengthText = document.querySelector('.password-strength-text');

passwordInput.addEventListener('input', checkPasswordStrength);

function checkPasswordStrength() {
    const password = passwordInput.value;
    const passwordStrength = calculatePasswordStrength(password);

    passwordStrengthText.textContent = getPasswordStrengthText(passwordStrength);
    passwordStrengthText.className = `password-strength-text ${getPasswordStrengthClass(passwordStrength)}`;
}

function calculatePasswordStrength(password) {
    const length = password.length;
    let complexity = 0;

    // Check for lowercase letters
    if (/[a-z]/.test(password)) {
        complexity++;
    }

    // Check for uppercase letters
    if (/[A-Z]/.test(password)) {
        complexity++;
    }

    // Check for numbers
    if (/[0-9]/.test(password)) {
        complexity++;
    }

    // Check for special characters
    if (/[!@#$%^&*()_+\-=[\]{};':"\\|,.<>/?]/.test(password)) {
        complexity++;
    }

    // Assign a strength level based on the calculated complexity and length
    if (length < 8 || complexity < 2) {
        return 0; // Weak
    } else if (length < 10 || complexity < 3) {
        return 1; // Fair
    } else if (length < 12 || complexity < 4) {
        return 2; // Good
    } else if (length < 14 || complexity < 5) {
        return 3; // Strong
    } else {
        return 4; // Very Strong
    }
}

function getPasswordStrengthText(passwordStrength) {
    // Return the text representation of the password strength level
    switch (passwordStrength) {
        case 0:
            return 'Weak';
        case 1:
            return 'Fair';
        case 2:
            return 'Good';
        case 3:
            return 'Strong';
        case 4:
            return 'Very Strong';
        default:
            return '';
    }
}

function getPasswordStrengthClass(passwordStrength) {
    // Return the CSS class based on the password strength level
    switch (passwordStrength) {
        case 0:
            return 'weak';
        case 1:
            return 'fair';
        case 2:
            return 'good';
        case 3:
            return 'strong';
        case 4:
            return 'very-strong';
        default:
            return '';
    }
}
