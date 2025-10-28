document.addEventListener("DOMContentLoaded", () => {
    const csrfToken = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");

    const mensaje = document.getElementById("mensaje-favorito");

    document.querySelectorAll('form[id^="favoritoForm-"]').forEach((form) => {
        form.addEventListener("submit", async (e) => {
            e.preventDefault();
            const idProducto = form.dataset.id;

            try {
                const response = await fetch(`/favorito/add/${idProducto}`, {
                    method: "POST",
                    headers: {
                        "X-CSRF-TOKEN": csrfToken,
                        Accept: "application/json",
                        "X-Requested-With": "XMLHttpRequest",
                    },
                });

                const data = await response.json();

                mensaje.textContent = data.message;
                mensaje.classList.remove(
                    "hidden",
                    "opacity-0",
                    "-translate-y-2"
                );
                mensaje.classList.add("opacity-100", "translate-y-0");

                setTimeout(() => {
                    mensaje.classList.add("opacity-0", "-translate-y-2");
                    setTimeout(() => mensaje.classList.add("hidden"), 300);
                }, 2000);
            } catch (error) {
                console.error("Error al agregar favorito:", error);
            }
        });
    });

    document
        .querySelectorAll('form[action*="favorito/delete"]')
        .forEach((form) => {
            form.addEventListener("submit", async (e) => {
                e.preventDefault();

                const url = form.action;
                const row = form.closest("tr");

                try {
                    const response = await fetch(url, {
                        method: "DELETE",
                        headers: {
                            "X-CSRF-TOKEN": csrfToken,
                            Accept: "application/json",
                            "X-Requested-With": "XMLHttpRequest",
                        },
                    });

                    if (!response.ok) throw new Error("Error al eliminar");

                    row.remove();

                    mensaje.textContent = "Producto eliminado de favoritos";
                    mensaje.classList.remove(
                        "hidden",
                        "opacity-0",
                        "-translate-y-2"
                    );
                    mensaje.classList.add("opacity-100", "translate-y-0");

                    setTimeout(() => {
                        mensaje.classList.add("opacity-0", "-translate-y-2");
                        setTimeout(() => mensaje.classList.add("hidden"), 300);
                    }, 2000);
                } catch (error) {
                    console.error("Error al eliminar favorito:", error);
                    mensaje.textContent = "No se pudo eliminar el producto";
                    mensaje.classList.remove(
                        "hidden",
                        "opacity-0",
                        "-translate-y-2"
                    );
                    mensaje.classList.add("opacity-100", "translate-y-0");

                    setTimeout(() => {
                        mensaje.classList.add("opacity-0", "-translate-y-2");
                        setTimeout(() => mensaje.classList.add("hidden"), 300);
                    }, 2000);
                }
            });
        });
});
