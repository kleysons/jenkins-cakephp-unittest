pipeline {
    agent { dockerfile true }
    stages {
        stage('docker-run') {
            steps {
                sh 'php -v'
                sh 'cd cakephp/app/Vendor && pwd && wget http://getcomposer.org/composer.phar && php composer.phar install && mkdir /usr/share/php/PHPUnit && cp ./PHPUnit/* /usr/share/php/PHPUnit/'
                sh 'ls /usr/share/php/PHPUnit/'
                sh 'chmod +x cakephp/lib/Cake/Console/cake'
                sh 'cakephp/lib/Cake/Console/cake test app AllTests'
            }
        }
    }
}