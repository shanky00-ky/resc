<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

       
</head>
<body>

<header>
    <h1>Admin Dashboard</h1>
</header>

<div class="container">
    <h2>Add a New Feature</h2>
    <form id="addFeatureForm">
        <div class="form-group">
            <label for="featureName">Feature Name:</label>
            <input type="text" id="featureName" name="featureName" required>
        </div>
        <div class="form-group">
            <label for="featureDescription">Feature Description:</label>
            <textarea id="featureDescription" name="featureDescription" required></textarea>
        </div>
        <button type="submit">Add Feature</button>
    </form>

    <h2>Existing Features</h2>
    <div class="feature-list" id="featureList">
        <!-- Features will be dynamically populated here -->
    </div>
</div>

<script>
// Example JavaScript to handle CRUD operations
document.addEventListener('DOMContentLoaded', function() {
    const featureList = document.getElementById('featureList');
    const addFeatureForm = document.getElementById('addFeatureForm');

    // Sample data (This should be replaced with a database call via backend)
    let features = [
        { id: 1, name: 'Feature 1', description: 'Description of feature 1' },
        { id: 2, name: 'Feature 2', description: 'Description of feature 2' }
    ];

    function renderFeatures() {
        featureList.innerHTML = '';
        features.forEach(feature => {
            const featureItem = document.createElement('div');
            featureItem.classList.add('feature-item');
            featureItem.innerHTML = `
                <div>
                    <strong>${feature.name}</strong>
                    <p>${feature.description}</p>
                </div>
                <div>
                    <button onclick="deleteFeature(${feature.id})">Delete</button>
                </div>
            `;
            featureList.appendChild(featureItem);
        });
    }

    addFeatureForm.addEventListener('submit', function(e) {
        e.preventDefault();
        const featureName = document.getElementById('featureName').value;
        const featureDescription = document.getElementById('featureDescription').value;
        const newFeature = { id: Date.now(), name: featureName, description: featureDescription };
        features.push(newFeature);
        renderFeatures();
        addFeatureForm.reset();
    });

    window.deleteFeature = function(id) {
        features = features.filter(feature => feature.id !== id);
        renderFeatures();
    }

    renderFeatures();
});
</script>

</body>
</html>
