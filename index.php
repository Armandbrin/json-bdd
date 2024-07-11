<?php
// $bdd = new bdd();
// $bdd->connect();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Fighter-UFC</title>
</head>

<body>
    <header class="bg-red-900">
        <nav class="flex justify-center items-center gap-10 h-24">
            <a class="underline text-white text-lg" href="index.php">Accueil</a>
            <a class="underline text-white text-lg" href="recup.php">Recup</a>
        </nav>
    </header>
    <main>
        <p>
            Profil:
        </p>
        <p>
            <span id="nickname"></span>
        </p>
        <p>
            -Nom / Prénom: <br>
            <span id="fullname"></span>
        </p>
        <p>
            -Age:
            <span id="birthdate"></span>
            ans
        </p>
        <p>
            -Taille:
            <span id="height"></span>
            m
        </p>
        <p>
            -Poids:
            <span id="weight"></span>
            kg
        </p>
        <p>
            -Victoires:
            <span id="wins"></span>
        </p>
        <p>
            -Défaites:
            <span id="losses"></span>
        </p>
        <p>
            -Egalité:
            <span id="draws"></span>
        </p>
        <p>
            -Porté des coups:
            <span id="reach"></span>
            m
        </p>
        <p>
            -Non contesté
            <span id="nocontests"></span>
        </p>
        <p>
            -KO technique gagné:
            <span id="tkowins"></span>
        </p>
        <p>
            -KO technique perdue:
            <span id="tkolosses"></span>
        </p>
        <p>
            -Soumissions gagné:
            <span id="submissions"></span>
        </p>
        <p>
            -soumissions perdue:
            <span id="submissionlosses"></span>
        </p>
        <p>
            -Titres gagné:
            <span id="titlewins"></span>
        </p>
        <p>
            -Titres perdue:
            <span id="titlelosses"></span>
        </p>
        <p>
            -Titres partagé:
            <span id="titledraws"></span>
        </p>
        <p>
            -Coups:
            <span id="sigstrikeslandedperminute"></span>
            / min
        </p>
        <p>
            -Précision des coups:
            <span id="sigstrikeaccuracy"></span>
            %
        </p>
        <p>
            -Réussite de takedown:
            <span id="takedownaverage"></span>
        </p>
        <p>
            -Réussite de soumission:
            <span id="submissionaverage"></span>
        </p>
        <p>
            -Taux de KO:
            <span id="knockoutpercentage"></span>
            %
        </p>
        <p>
            -Taux de TKO:
            <span id="technicalknockoutpercentage"></span>
            %
        </p>
        <p>
            -Taux de décision:
            <span id="decisionpercentage"></span>
            %
        </p>
    </main>
    <script>
        function profil() {
            // info
            let fullname = document.getElementById('fullname');
            let nickname = document.getElementById("nickname");
            let birthdate = document.getElementById("birthdate");
            let height = document.getElementById("height");
            let weight = document.getElementById("weight");
            let reach = document.getElementById("reach");
            let wins = document.getElementById("wins");
            let losses = document.getElementById("losses");
            let draws = document.getElementById("draws");
            let nocontests = document.getElementById("nocontests");
            let tkowins = document.getElementById("tkowins");
            let tkolosses = document.getElementById("tkolosses");
            let submissions = document.getElementById("submissions");
            let submissionlosses = document.getElementById("submissionlosses");
            let titlewins = document.getElementById("titlewins");
            let titlelosses = document.getElementById("titlelosses");
            let titledraws = document.getElementById("titledraws");
            // stat
            let sigstrikeslandedperminute = document.getElementById("sigstrikeslandedperminute");
            let sigstrikeaccuracy = document.getElementById("sigstrikeaccuracy");
            let takedownaverage = document.getElementById("takedownaverage");
            let submissionaverage = document.getElementById("submissionaverage");
            let knockoutpercentage = document.getElementById("knockoutpercentage");
            let technicalknockoutpercentage = document.getElementById("technicalknockoutpercentage");
            let decisionpercentage = document.getElementById("decisionpercentage");
            // id url
            let chaine = window.location.href;
            let result = chaine.split('=');
            let id = result[1]
            fetch("json/Fighters.json", {
                    headers: {
                        'Authorization': 'Basic ',
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                })
                .then(rep => rep.json())
                .then(rep => {
                    for (let i = 0; i < rep.length; i++) {
                        if (id == rep[i].FighterId) {
                            // info
                            fullname.innerText = `${rep[i].LastName} ${rep[i].FirstName}`;
                            birthdate.innerText = `${rep[i].Birthdate}`;
                            height.innerText = `${rep[i].Height}`;
                            weight.innerText = `${rep[i].Weight}`;
                            reach.innerText = `${rep[i].Reach}`;
                            wins.innerText = `${rep[i].Wins}`;
                            losses.innerText = `${rep[i].Losses}`;
                            draws.innerText = `${rep[i].Draws}`;
                            nocontests.innerText = `${rep[i].NoContests}`;
                            tkowins.innerText = `${rep[i].TechnicalKnockouts}`;
                            tkolosses.innerText = `${rep[i].TechnicalKnockoutLosses}`;
                            submissions.innerText = `${rep[i].Submissions}`;
                            submissionlosses.innerText = `${rep[i].SubmissionLosses}`;
                            titlewins.innerText = `${rep[i].TitleWins}`;
                            titlelosses.innerText = `${rep[i].TitleLosses}`;
                            titledraws.innerText = `${rep[i].TitleDraws}`;
                            nickname.innerText = `${rep[i].Nickname}`;
                            // stat
                            sigstrikeslandedperminute.innerText = `${rep[i].CareerStats?.SigStrikesLandedPerMinute}`;
                            sigstrikeaccuracy.innerText = `${rep[i].CareerStats?.SigStrikeAccuracy}`;
                            takedownaverage.innerText = `${rep[i].CareerStats?.TakedownAverage}`;
                            submissionaverage.innerText = `${rep[i].CareerStats?.SubmissionAverage}`;
                            knockoutpercentage.innerText = `${rep[i].CareerStats?.KnockoutPercentage}`;
                            technicalknockoutpercentage.innerText = `${rep[i].CareerStats?.TechnicalKnockoutPercentage}`;
                            decisionpercentage.innerText = `${rep[i].CareerStats?.DecisionPercentage}`;
                        }
                    }
                });
        }
    </script>
</body>

</html>