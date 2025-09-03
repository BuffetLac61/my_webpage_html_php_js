from flask import Flask, render_template, jsonify

app = Flask(__name__)

@app.route("/")
def home():
    return render_template("index.html")

@app.route("/api/cv")
def api_cv():
    data = {
        "name": "Alexis Segurel",
        "education": [
            {"year": "2025 - Today", "desc": "Certification Cybersecurity, Jedha"},
            {"year": "2020 - 2025", "desc": "Engineering Master at Centrale Lille"},
        ],
        "skills": ["Python", "Django", "Linux", "Pentest"],
    }
    return jsonify(data)

if __name__ == "__main__":
    app.run(host="0.0.0.0", port=8000)
