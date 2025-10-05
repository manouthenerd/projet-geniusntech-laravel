import { CountUp } from "countup.js";

const countUpOtions = {
    startVal: 0,
    duration: 5,
    useGrouping: false,
    useEasing: true,
    separator: "",
    enableScrollSpy: true,
    scrollSpyOnce: true,

}

const satisfactionCounter = document.getElementById("satisfaction-counter") // 99 %
const partnerCounter = document.getElementById("partner-counter") // + 07
const projectCounter = document.getElementById("project-counter") // + 10
const companyCounter = document.getElementById("company-counter") // + 10

const satisfationCountUp = new CountUp(satisfactionCounter, 99, {...countUpOtions, prefix: "+", suffix: "%", scrollSpyDelay: 1500});
const partnerCountUp = new CountUp(partnerCounter, 7, {...countUpOtions, prefix: "+", scrollSpyDelay: 1500});
const projectCountUp = new CountUp(projectCounter, 10, {...countUpOtions, prefix: "+", scrollSpyDelay: 1500});
const companyCountUp = new CountUp(companyCounter, 10, {...countUpOtions, prefix: "+", scrollSpyDelay: 1500});

satisfationCountUp.error ? console.log(satisfationCountUp.error) : satisfationCountUp.start()
partnerCountUp.error ? console.log(partnerCountUp.error) : partnerCountUp.start()
projectCountUp.error ? console.log(projectCountUp.error) : projectCountUp.start()
companyCountUp.error ? console.log(companyCountUp.error) : companyCountUp.start()