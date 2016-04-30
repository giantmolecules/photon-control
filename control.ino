bool ctl = 0;
int wait = 10;

void setup() {
Particle.function("RUN", run);
Particle.function("STOP", stop);
}

void loop() {
    if(ctl){
        for(int i = 0; i < 255; i++){
            RGB.color(i, 0, 255-1);
            delay(wait);
        }
        for(int i = 255; i > 0; i--){
            RGB.color(i, 0, 255-1);
            delay(wait);
        }
    }
}

int run(String args){
    wait = args.toInt();
    RGB.control(TRUE);
    ctl = 1;
    return 1;
}

int stop(String args){
    RGB.control(FALSE);
    ctl = 0;
    return 1;
}
