document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    const productosContainer = document.querySelector("#productos");

    form.addEventListener("change", function () {
        const data = new FormData(form);

        fetch("/productos/filtrar", {
            method: "POST",
            headers: {
                Accept: "application/json",
                "X-CSRF-TOKEN": document.querySelector(
                    'meta[name="csrf-token"]'
                ).content,
            },
            body: data,
        })
            .then((response) => response.json())
            .then((data) => {
                console.log("Respuesta del servidor:", data);
                productosContainer.innerHTML = data.html;
            })
            .catch((error) => console.error("Error:", error));
    });
});
