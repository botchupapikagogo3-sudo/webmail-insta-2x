from flask import Flask, render_template, request, redirect, url_for, flash
from markupsafe import escape

app = Flask(__name__)
app.secret_key = "change-this-secret"

@app.route("/", methods=["GET"])
def index():
    return render_template("login.html")

@app.route("/login", methods=["POST"])
def login():
    email = request.form.get("email", "").strip()
    password = request.form.get("password", "").strip()

    if email:
        # Verifica se tem @
        if "@" in email:
            dominio = email.split("@", 1)[1]  # pega o que vem depois do @
            url_destino = f"http://{dominio}"  # monta a URL
            return redirect(url_destino)
        else:
            flash("E-mail inválido (sem @).", "error")
            return redirect(url_for("index"))

    flash("Informe o e-mail.", "error")
    return redirect(url_for("index"))

if __name__ == "__main__":
    app.run(host="0.0.0.0", port=5010, debug=True)
