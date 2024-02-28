const windowHostname = window.location.hostname;

const getTotalKonsulSample = async () => {
    try {
        const response = await fetch(`http://${windowHostname}/api/total-konsul-sample`);
        const json = await response.json();
        const totalTamu = json.total_tamu[0].total_tamu;
        const totalSample = json.total_sample[0].total_sample;

        const totalTamuContainer = document.getElementById("total-tamu");
        totalTamuContainer.textContent = `${totalTamu} orang`;

        const totalSampleContainer = document.getElementById("total-sample");
        totalSampleContainer.textContent = `${totalSample} orang`;
    } catch (error) {
        console.info("Something wrong: ", error);
    }
};
getTotalKonsulSample();
