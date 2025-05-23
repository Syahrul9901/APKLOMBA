<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WebGames-DummyGames</title>
</head>
<body>
    <div class="text-center">
    <h3>Dummy Game</h3>

<span id="game-info" style="display: none;">Score: <span id="score"></span></span>
<button id="start-button" onclick="startGame()">Start</button>
<button id="end-button" style="display: none;" onclick="endGame()">End</button>

<script>
    const state = {
        running: false,
        score: 0,
    };

    function gameTick() {
        if (!state.running) {
            return;
        }
        state.score += Math.random();
        document.getElementById('score').innerText = `${state.score}`;
        setTimeout(() => gameTick(), 10);
    }

    function startGame() {
        state.running = true;
        state.score = 0;
        document.getElementById('start-button').style.display = 'none';
        document.getElementById('end-button').style.display = 'block';
        document.getElementById('game-info').style.display = 'block';
        gameTick();
    }

    function endGame() {
        state.running = false;
        window.parent.postMessage({
            event_type: "game_run_end",
            score: state.score,
        });
        document.getElementById('start-button').style.display = 'block';
        document.getElementById('end-button').style.display = 'none';
    }

</script>
    </div>


</body>
</html>
