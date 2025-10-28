document.addEventListener("DOMContentLoaded", () => {
    const toastContainer = document.createElement("div");
    toastContainer.id = "toast-container";
    toastContainer.className = "fixed top-5 right-5 z-50 space-y-2";
    document.body.appendChild(toastContainer);

    function mostrarToast(mensaje, tipo = "success") {
        const toast = document.createElement("div");

        const colores = {
            success: "bg-green-500",
            error: "bg-red-500",
            info: "bg-blue-500",
        };

        toast.className = `${colores[tipo]} text-white text-sm font-semibold px-4 py-2 rounded-lg shadow-lg opacity-0 transform translate-y-2 transition-all duration-300`;
        toast.textContent = mensaje;

        toastContainer.appendChild(toast);

        setTimeout(
            () => toast.classList.add("opacity-100", "translate-y-0"),
            50
        );

        setTimeout(() => {
            toast.classList.remove("opacity-100");
            toast.classList.add("opacity-0", "translate-y-2");
            setTimeout(() => toast.remove(), 300);
        }, 2500);
    }

    document.querySelectorAll('form[action*="carrito/add"]').forEach((form) => {
        form.addEventListener("submit", async (e) => {
            e.preventDefault();

            const url = form.action;
            const csrfToken = document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content");

            try {
                const response = await fetch(url, {
                    method: "POST",
                    headers: {
                        "X-CSRF-TOKEN": csrfToken,
                        Accept: "application/json",
                        "X-Requested-With": "XMLHttpRequest",
                        "Content-Type": "application/json",
                    },
                    body: JSON.stringify({ cantidad: 1 }),
                });

                if (!response.ok) throw new Error("Error en la petición");

                const data = await response.json();

                mostrarToast(
                    data.message || "Producto agregado al carrito",
                    "success"
                );
            } catch (error) {
                console.error("Error al agregar al carrito:", error);
                mostrarToast("No se pudo agregar el producto", "error");
            }
        });
    });

    document
        .querySelectorAll('form[action*="carrito/delete"]')
        .forEach((form) => {
            form.addEventListener("submit", async (e) => {
                e.preventDefault();

                const url = form.action;
                const csrfToken = document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute("content");

                try {
                    const response = await fetch(url, {
                        method: "DELETE",
                        headers: {
                            "X-CSRF-TOKEN": csrfToken,
                            Accept: "application/json",
                            "X-Requested-With": "XMLHttpRequest",
                        },
                    });

                    if (!response.ok) throw new Error("Error en la petición");

                    const data = await response.json();

                    if (data.success) {
                        const fila = form.closest("tr");
                        fila.remove();

                        mostrarToast(data.message, "success");
                    } else {
                        mostrarToast(
                            "No se pudo eliminar el producto",
                            "error"
                        );
                    }
                } catch (error) {
                    console.error("Error al eliminar del carrito:", error);
                    mostrarToast("Error al eliminar el producto", "error");
                }
            });
        });
});
