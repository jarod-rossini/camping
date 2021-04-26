<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Réserver</title>
		<link href="public/css/style.css" rel="stylesheet"/>
	</head>
	<body>
		<main class="mainreserver">
			<form method='post'>
                <label for="name">Nom</label>
                    <input required type="text" name="name" maxlength="255"/>
                <label for="type">Type d'hébergement</label>
                    <select required name="type">
                        <option>-- Choisir --</option>
                        <option value="2">Camping-car (20€ par jour)</option>
                        <option value="1">Tente (10€ par jour)</option>
                    </select>
                <label for="start">Date début</label>
                    <input required type="date" name="start"/>
                <label for="end">Date fin</label>
                    <input required type="date" name="end"/>
                <label for="additional1">borne électrique (2€ par jour)</label>
                    <input type="checkbox" name="additional1"/>
                <label for="additional2">Disco-Club “Les girelles dansantes” (17€ par jour)</label>
                    <input type="checkbox" name="additional2"/>
                <label for="additional3">Yoga, Frisbee et Ski Nautique (pack à 30 euros par jour)</label>
                    <input type="checkbox" name="additional3"/>
                <input class="submit" type="submit" value="Réserver"/>
            </form>
            <?php if(isset($_SESSION['message'])){echo $_SESSION['message'];} ?>
		</main>
	</body>
</html>