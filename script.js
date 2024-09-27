    const counters = document.querySelectorAll('.counter');
    counters.forEach(counter => {
        const updateCounter = () => {
            const target = +counter.getAttribute('data-target'); // Get the target number
            const currentValue = +counter.innerText; // Get current displayed value
            const increment = target / 100; // Adjust this value for speed

            if (currentValue < target) {
                counter.innerText = Math.ceil(currentValue + increment); // Increment the number
                setTimeout(updateCounter, 20); // Repeat the function after 20ms for smooth animation
            } else {
                counter.innerText = target; // Ensure it ends at the target
            }
        };

        updateCounter();
    });

