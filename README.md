Reference: 
- Amazon SQS https://docs.aws.amazon.com/AWSSimpleQueueService/latest/SQSDeveloperGuide/sqs-how-it-works.html
- Laravel Queues https://laravel.com/docs/8.x/queues

Objective:
- The objective of this POC is to create a job and queue it in Amazon SQS
- Then laravel queue:worker will read from queue and execute the job.


How the POC works
- Create Amazon IAM user with SQS rights.
- Copy the ACCESS_ID, SECRET_KEY and REGION in your .env file
- Also update your AWS_ACCESS_KEY_ID and AWS_SECRET_ACCESS_KEY
- Navigate to / index page of the project. And queue a website for crawling
- Once the message is queue, execute `php artisan queue:work` command


To make the queue run automatically setup supervisord along with the artisan queue worke command.


Extra:
- Standard Queue: Use this queue when order of execution of jobs is not important as order might not be preserved in this queue.
- FIFO Queue: Use this queue when order of execution of jobs is important. FIFO queues are also durable.
