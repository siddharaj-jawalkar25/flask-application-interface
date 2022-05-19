I have created main.py script to configure the endpoint for uploading file or image. It defines the required URIs for performing file upload operations.

I have allowed certain types of files, such as pdf, txt, docx, png, jpg, jpeg, gif.

I am using http method POST to upload the image file. After uploading and saving the image to disk I am returning the filename to the jinja2 flask template.

I have another function display_image() that is used on the flask template to display the actual image from the static/uploads folder.

I have used upload.html page for uploading file to the desired directory.

Now you need template page for uploading file as well as it will also display the uploaded image. This is upload.html page kept under directory – templates, which is the standard directory for storing template or view file in flask application.

Now navigate to the project’s root directory using command line tool and execute the command python main.py or if your Python is on the classpath then just execute main.py, your server will be started on default port 5000.