from flask import Flask, render_template
import sqlite3

app = Flask(__name__, static_folder='static', static_url_path='/static')

@app.route("/")
def index():
	values = {
		'message': 'Please wait while your hosting is being processed...'
	}
	return render_template('index.html', **values)


@app.route('/host.php')
def static_from_root():
    return send_from_directory(app.static_folder, request.path[1:])

if __name__ == "__main__":
	app.run(port = 8888, debug = True)