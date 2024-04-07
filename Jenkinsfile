pipeline {
    agent any
    stages {
        stage('Clone Repository') {
            steps {
                git credentialsId: 'ssh-key-c39efc99', url: 'https://github.com/maheshfinpros/mahesh-php.git'
            }
        }
        stage('Deploy to Server') {
            steps {
                script {
                    sshagent(credentials: ['ssh-key-c39efc99']) {
                        sh '''
                            scp -i /c/Users/mahes/Downloads/yourkey.pem -r * ec2-user@13.235.246.148:/var/www/html/
                            ssh -i /c/Users/mahes/Downloads/yourkey.pem ec2-user@13.235.246.148 "sudo systemctl restart httpd"
                        '''
                    }
                }
            }
        }
    }
}
