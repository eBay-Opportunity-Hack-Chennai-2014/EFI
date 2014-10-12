function fileNameStr=hack5(imname)
  pkg load image;
  pkg load geometry;
  %imname='C8.jpg';
  d=dir('salientdatabase');
  imwrite(imresize(imread(imname),[300,300]),imname);
  strcmd = ['D:\Octave\hsaliencyexe\hack_final\HSaliency.exe ' imname ' .\out_dir\'];
  system(strcmd);
  imnamek=imread([imname]);
  slhInd = index(imname,"/","last");
  fName = imname(slhInd+1:end-4);
  mapstage2=imread(['.\out_dir\' fName '_res.png']);
  Image1= hackt(mapstage2,imnamek);
  imLBP1=lbp(Image1);
  count=1;
  for i=3:length(d)
    d1=load(['salientdatabase\' d(i).name '\LBP.mat']);
    x2=d1.imLBP;
    for j=1:length(x2)
      #matchcose(count)=pdist2(imLBP1,x2(j).f,'euclidean');
      matchcose(count)=distancePoints(imLBP1,x2(j).f);
      matind(count)=i-2;
      count=count+1;
    end
  end
  [ij,ind]=min(matchcose);
  class=matind(ind);
  d1=load(['salientdatabase\' d(class+2).name '\LBP.mat']);
  x2=d1.imLBP;
  %x1=load(['salientdatabase\LBP.mat']);
  for i=1:length(x2)
    #matchcose1(i)=pdist2(imLBP1,x2(i).f,'euclidean');
    matchcose1(i) = distancePoints(imLBP1,x2(i).f);
  end
  [ima,ind]=sort(matchcose1);
  fileNameStr='';
  %fid2 = fopen('ret.txt','w');
  for i=1:5
    %fprintf(fid2,'%s\n',['database\' d(class+2).name '\' x2(ind(i)).n]);
    #strw(i).val = ['database\' d(class+2).name '\' x2(ind(i)).n];
    fileNameStr = sprintf('%s%s,',fileNameStr,['database\' d(class+2).name '\' x2(ind(i)).n]);
  end
  fileNameStr = fileNameStr(1:end-1);
  fprintf(1,'\n%s',fileNameStr);
  %fclose(fid2);
endfunction