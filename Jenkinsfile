pipeline {
    agent any
    stages {
        stage('Clone Repository') {
            steps {
                git 'https://github.com/maheshfinpros/mahesh-php.git'
            }
        }
        stage('Configure Apache') {
            steps {
                sh 'sudo sed -i "s#DocumentRoot /var/www/html#DocumentRoot ${WORKSPACE}#" /etc/apache2/sites-available/000-default.conf'
            }
        }
        stage('Restart Apache') {
            steps {
                sh 'sudo systemctl restart apache2'
            }
        }
    }
}
