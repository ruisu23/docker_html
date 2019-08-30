# Docker Build and Push

1. Update your OS
2. install docker                 - $apt install docker.io -y
3. Clone the repository           - $git clone https://github.com/ruisu23/testing.git
4. Go to docker_html/HTML23 folder    - $cd docker_html/HTML23

*Make sure that the folder has the Dockerfile file in it*

5. Build to image                 - $docker build -t [image_name] .
6. Tag your image                 - $docker tag [image_name] [accnt_name]/[image_name]

*Creates a copy of your images with a new name*

7. Login to your Docker Account   - $docker login
8. Push image to your Repository  - $docker push [Tagged_image_name]
