// Sample data (replace this with your server-side code to fetch entries)
const entries = [
    { name: 'John Doe', email: 'john@example.com', message: 'Hello, how are you?' },
    { name: 'Jane Smith', email: 'jane@example.com', message: 'Nice to meet you!' },
    // Add more entries as needed
];

function renderEntries(entriesToRender = entries) {
    const entriesList = document.getElementById('entriesList');
    entriesList.innerHTML = '';

    entriesToRender.forEach(entry => {
        const listItem = document.createElement('li');
        listItem.innerHTML = `
            <strong>Name:</strong> ${entry.name} <br>
            <strong>Email:</strong> ${entry.email} <br>
            <strong>Message:</strong> ${entry.message} <br>
        `;
        entriesList.appendChild(listItem);
    });
}

function filterEntries() {
    const searchTerm = document.getElementById('search').value.toLowerCase();

    const filteredEntries = entries.filter(entry =>
        entry.name.toLowerCase().includes(searchTerm) || entry.email.toLowerCase().includes(searchTerm)
    );

    renderEntries(filteredEntries);
}

function sortEntries() {
    const sortBy = document.getElementById('sort').value;

    const sortedEntries = [...entries];

    sortedEntries.sort((a, b) => {
        if (sortBy === 'name') {
            return a.name.localeCompare(b.name);
        } else if (sortBy === 'email') {
            return a.email.localeCompare(b.email);
        } else {
            // Default to sorting by name if an invalid option is selected
            return a.name.localeCompare(b.name);
        }
    });

    renderEntries(sortedEntries);
}

document.addEventListener('DOMContentLoaded', () => {
    renderEntries();
});
